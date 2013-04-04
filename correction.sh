c=25
for f in `find content/01-fonts/ -name "*.JPG"`
do
   echo $f
   convert $f -fuzz 50% -crop +$c+$c -crop -$c-$c -border $cx$c -transparent white $f.png
   rm $f
done