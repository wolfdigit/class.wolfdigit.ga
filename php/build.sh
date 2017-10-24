#!/bin/sh
cd "$(dirname "$0")"
rm -r ../html
EF="-ef build.sh -ef build.bat -ef ansImg.inc.php"
for f in `ls *.inc.php`; do
	EF="$EF -ef $f"
done
echo '<?php \n define ("BUILDIMG", true);' > const.inc.php
python3 ../php2html.py -o ./ ../html $EF > /tmp/dbg
echo '<?php \n define ("BUILDIMG", false);' > const.inc.php
python3 ../php2html.py -o ./ ../html $EF > /tmp/dbg
