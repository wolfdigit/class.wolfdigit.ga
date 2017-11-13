#!/bin/sh
cd "$(dirname "$0")"
rm -r ../html
EF="-ef build.sh -ef build.bat -ef ansImg.inc.php"
for f in `ls *.inc.php`; do
	EF="$EF -ef $f"
done
echo '<?php \n define ("BUILDIMG", true);' > const.inc.php
python3 ../php2html.py -o ./ ../html $EF
echo '<?php \n define ("BUILDIMG", false);' > const.inc.php
python3 ../php2html.py -o ./ ../html $EF

for f in `ls ../html/Cpp-programming/*.html`; do
	sed -e 's/charset=\"utf-8\"/charset=\"big-5\"/g' < $f > /tmp/tmp
	iconv -f utf-8 -t cp950  /tmp/tmp > $f
done