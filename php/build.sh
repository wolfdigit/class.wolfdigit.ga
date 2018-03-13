#!/bin/sh
PATH="$PATH:/cygdrive/c/Program Files/wkhtmltopdf/bin/"

cd "$(dirname "$0")"
rm -r ../html
EF="-ef build.sh -ef build.bat -ef ansImg.inc.php -ef htmlImg.html"
for f in `ls *.inc.php`; do
	EF="$EF -ef $f"
done
echo -e '<?php \n define ("BUILDIMG", true);' > const.inc.php
python3 ../php2html.py -o ./ ../html $EF
echo -e '<?php \n define ("BUILDIMG", false);' > const.inc.php
python3 ../php2html.py -o ./ ../html $EF

#for f in `ls ../html/Cpp-programming/*.html`; do
#	cat $f | sed -e 's/charset=\"utf-8\"/charset=\"big5\"/g' | sed -e 's/charset=utf-8/charset=big5/g' > /tmp/tmp
#	iconv -f utf-8 -t cp950  /tmp/tmp > $f
#done