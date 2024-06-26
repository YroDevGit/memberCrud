const path = require('path');

module.exports = {
    entry: './reactjs/src/index.jsx',
    output: {
        path: path.resolve(__dirname, 'public/'),
        filename: 'bundle.js'
    },
    module: {
        rules: [
            {
                test: /\.jsx?$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-react', '@babel/preset-env']
                    }
                }
            },
            {
                test: /\.svg$/,
                use: ['file-loader']
            },
            {
                test: /\.css$/,
                use: ['style-loader', 'css-loader']
            }
            
        ]
    },
    resolve: {
        extensions: ['.js', '.jsx']
    }
};