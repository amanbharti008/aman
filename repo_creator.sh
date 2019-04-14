cd Desktop
cd practice
git init 
git clone https://github.com/amanbharti008/aman.git
cd aman
touch intro.txt
git add intro.txt
git commit -m "My intro"
git branch interests
git checkout interests
git add intro.txt
git commit -m "added interest $(date +"%F %T" )"
git checkout master
git merge "interests"
git remote add ori https://github.com/amanbharti008/aman.git
git push -u ori master 
