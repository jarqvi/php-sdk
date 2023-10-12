@echo off

REM Directory paths where files should be moved
set "directories[0]=object-storage"
set "directories[1]=dbaas"
set "directories[2]=paas"
set "directories[3]=mail"
set "directories[4]=dns"

REM Loop through directories and move specified files
for %%d in (%directories%) do (
    REM Move README.md file if it exists
    if exist ".\%%d\README.md" (
        move ".\%%d\README.md" ".\doc\%%d"
    )

    REM Move all markdown files except README.md file in the doc directory
    for /R ".\%%d\docs\Model" %%f in (*.md) do (
        move "%%f" ".\doc\%%d\docs\Model"
    )
    rd /s /q ".\%%d\docs\Model"

    for /R ".\%%d\docs\Api" %%f in (*.md) do (
        move "%%f" ".\doc\%%d\docs\Api"
    )
    rd /s /q ".\%%d\docs\Api"
)