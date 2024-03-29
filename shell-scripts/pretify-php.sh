for file in $(find . -name "*.php" | grep -v vendor | grep -v node_modules | grep -v includes/classes | grep -v includes/functions); do
	filename=$(basename -- "$file") filename="${filename%.*}"
	# Directory location of the file
	directory=$(dirname "$file")

	pattern="#format-tailwind"

	if head -3 "$file" | grep "$pattern" >/dev/null; then
		mv "$file" "$directory/$filename.html"
	fi
done

npx prettier "**/*.html" --write >/dev/null

for file in $(find . -name "*.html" | grep -v vendor | grep -v node_modules | grep -v includes/classes | grep -v includes/functions); do
	filename=$(basename -- "$file")
	filename="${filename%.*}"
	# Directory location of the file
	directory=$(dirname "$file")
	mv "$file" "$directory/$filename.php"
done
