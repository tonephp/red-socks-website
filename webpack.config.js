const path = require('path');

module.exports = {
  mode: 'production',
  entry: {
      app: ['./app/src/app.js'],
      admin: ['./app/src/admin.js'],
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, 'public/dist'),
  },
  module: {
    rules: [
      {
        test: /\.s[ac]ss$/i,
        use: [
          {
            loader: 'file-loader',
            options: {
                outputPath: '../dist',
                name: '[name].css',
            },
          },
          // Compiles Sass to CSS
          "sass-loader",
        ],
      },
    ],
  }
};