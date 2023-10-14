import * as fs from 'fs';
import * as YAML from 'yaml';

interface IClass {
    examples: Record<string, string>;
}

interface ISdk {
    readme: string;
    classes: Record<string, IClass>;
}

interface ITemplate {
    sdks: Record<string, ISdk>;
}

function readMdFile(filePath: string, method: string, example: string) {
    const mdFile = fs.readFileSync(filePath, 'utf8');

    const indexMethod = mdFile.indexOf(`# **${method}**`);
    const sectionMethod = mdFile.substring(indexMethod);
    
    const regexMethod = /```([a-zA-Z]*)\n([\s\S]+?)```/;
    const resolveMethod = sectionMethod.replace(regexMethod, '```typescript\n' + example + '\n```');

    const newMdFile = mdFile.replace(sectionMethod, resolveMethod);
    fs.writeFileSync(filePath, newMdFile);
}

function readTemplate() {
    const templateFile = fs.readFileSync('./template.yml', 'utf8');
    if (templateFile) {
        const template: ITemplate = YAML.parse(templateFile);
        for (const sdk in template.sdks) {
            const readmeResult = template.sdks[sdk].readme;
            const filePath = `../../../doc/${sdk}/README.md`;

            const readme = fs.readFileSync(filePath, 'utf8');
            const indexOfReadme = readme.indexOf('## Getting Started');
            const sectionOfReadme = readme.substring(indexOfReadme);

            const regexReadme = /```([a-zA-Z]*)\n([\s\S]+?)```/;
            const resolveReadme = sectionOfReadme.replace(regexReadme, '```php\n' + readmeResult + '\n```');

            const newReadme = readme.replace(sectionOfReadme, resolveReadme);
            fs.writeFileSync(filePath, newReadme);
        }
    }
}

readTemplate();