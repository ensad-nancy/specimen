c=25
echo 'refreshing specimen …'

for f in `find content/01-fonts/ -name "*.JPG"`
do
   echo $f
   convert $f -fuzz 50% -crop +$c+$c -crop -$c-$c -border $cx$c -crop -0-100 -crop +0+100 -transparent white $f.png
   
   # -crop -0-100 -crop +0+100
   rm $f
done
 
echo 'done'