c=25
# for f in `find ~/Desktop/png512-disque/ -name "*.jpg"`
for f in `find content/01-fonts/ -name "*.JPG"`
do
   # innercrop -f 4 -m crop $f .$f
   # unperspective -f 20 $f .$f
   echo $f
   convert $f -fuzz 50% -crop +$c+$c -crop -$c-$c -border $cx$c -transparent white $f.png
   rm $f
done