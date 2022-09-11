apk add zip -y

cd ..

zip -r -1 -9 $CI_PROJECT_TITLE-$CI_COMMIT_TIMESTAMP.zip ./ -x ../src/\*