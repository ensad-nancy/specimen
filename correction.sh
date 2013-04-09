c=25
cut=200
echo 'refreshing specimen …'

for f in `find content/01-fonts/ -name "*.JPG"`
do
   echo $f
   convert $f -fuzz 50% -crop +$c+$c -crop -$c-$c -border $cx$c -crop -0-$cut -crop +0+$cut -transparent white $f.png
   rm $f
done

echo 'done'