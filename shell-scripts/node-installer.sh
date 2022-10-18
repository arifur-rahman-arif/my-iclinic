apk add yarn

yarn install

yarn build


for dir in react-components/*
    do
        FILENAME="package.json"
        cd "$dir"
        
        if [ -f "$FILENAME" ]; then
            yarn install
            yarn build
            rm -rf node_modules
        fi;

        cd $CI_PROJECT_DIR
    done
