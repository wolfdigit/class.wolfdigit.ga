#!/bin/sh
cd "$(dirname "$0")"
rm -r ../html
EF="-ef build.sh"
for f in `ls *.inc.php`; do
	EF="$EF -ef $f"
done
python3 ../php2html.py -o ./ ../html $EF
