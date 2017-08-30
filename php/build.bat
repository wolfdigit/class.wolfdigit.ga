setlocal ENABLEDELAYEDEXPANSION
cd /d %~dp0
del /s /q ..\html
set "EF=-ef build.sh -ef build.bat"
for /r %%i in (*.inc.php) do (
    call set "EF=!EF! -ef %%i"
)
for /r %%i in (desktop.ini) do (
    call set "EF=!EF! -ef %%i"
)
C:\Python36-32\python.exe ../php2html.py -o ./ ../html %EF%
