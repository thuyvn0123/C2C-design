const path = require('path')
const webpack = require('webpack')

module.exports = {
    entry: {
        main: './src/main.js',

    },
    output: {
        filename: '[name].js',
        path: path.resolve(__dirname, 'js')
    },


    watch: true,// watch mode

    mode: 'development',
    devtool: 'inline-source-map', //semi dev mode

    plugins: [
        new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery'
        })
    ], //semi import jquery in jquery_test.js

    optimization: {
        splitChunks: {
          chunks: 'all'
        }
    },//code splitting, clean up duplicate libraries 

    resolve: {
        alias: {
          Templates: path.resolve(__dirname, 'src/')
        }
    },// Absolute path

    resolve: {
        extensions: ['.mjs', '.js', '.json']
    },

    module: {
        rules: [
          {
            test: /\.m?js$/,
            exclude: /(node_modules|bower_components)/,
            use: {
              loader: 'babel-loader',
              options: {
                presets: ['@babel/preset-env']
              }
            }
          },
          { test: /\.(png|woff|woff2|eot|ttf|svg)$/, use: ['url-loader?limit=100000'] },


          // {
          //   test: /\.js$/,
          //   exclude: /node_modules/,
          //   loader: 'eslint-loader',
          //   options: {
          //       rules: {
          //       quotes: ["error", "double"]
          //       }
          //   },
          // },

          // {
          //   test: /\.(png|jpg|gif)$/i,
          //   use: [
          //     {
          //       loader: 'url-loader',
          //       options: {
          //           limit: 8192, // 8*1024
          //       },
          //     },
          //   ],
          // },

          {
            test: /\.(png|jpg|gif|ttf)$/i,
            use: [
              {
                loader: 'file-loader',
                options: {
                    name: '[path][name].[ext]',
                },
              },
            ],
          },

          {
            test: /\.(scss)$/,
            use: [{
              loader: 'style-loader', // inject CSS to page
            }, {
              loader: 'css-loader', // translates CSS into CommonJS modules
            }, 

            {
              loader: 'sass-loader' // compiles Sass to CSS
            }]
          },

        ]
    },
   

  
}