set path=%path%;..\..\bin\php\php5.3.13\

set MODEL_PATH=module\Application\src\
set NAMESPACE=Application\Entity\

del /Q %MODEL_PATH%%NAMESPACE%\*.php

vendor\doctrine\doctrine-module\bin\doctrine-module orm:convert-mapping --namespace=%NAMESPACE% --force  --from-database annotation %MODEL_PATH% | pause

vendor\bin\doctrine-module.bat orm:generate-entities --generate-annotations="true" %MODEL_PATH% | pause

pause