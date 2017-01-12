var webpack = require("webpack");
var ExtractTextPlugin = require("extract-text-webpack-plugin");

module.exports = {
  entry: { admin: "./resources/assets/js/app.js" },
  output: {
    path: __dirname + "/public/js",
    publicPath: "/js/",
    filename: "[name].entry.js",
    chunkFilename: "[name].chunk.js"
  },
  module: {
    loaders: [
      { test: /\.vue$/, loader: "vue" },
      {
        test: /\.(jpe?g|png|gif|svg)$/i,
        loader: "url?limit=10000!img?progressive=true"
      },
      {
        test: /\.woff2?$/,
        loader: "url-loader?limit=10000&minetype=application/font-woff"
      },
      { test: /\.ttf$/, loader: "file-loader" },
      { test: /\.eot$/, loader: "file-loader" },
      { test: /\.svg$/, loader: "file-loader" },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: "babel-loader",
        query: { presets: [ "es2015" ] }
      },
      // Extract css files
      {
        test: /\.css$/,
        loader: ExtractTextPlugin.extract({
          fallbackLoader: "style-loader",
          loader: "css-loader"
        })
      },
      {
        test: /\.less$/,
        loader: ExtractTextPlugin.extract({
          fallbackLoader: "style-loader",
          loader: "css-loader!less-loader"
        })
      },
      {
        test: /\.scss$/,
        loader: ExtractTextPlugin.extract({
          fallbackLoader: "style-loader",
          loader: "css-loader!sass-loader"
        })
      }
    ]
  },
  resolve: { alias: { "vue$": "vue/dist/vue.common.js" } },
  plugins: [ new ExtractTextPlugin("[name].css") ]
};
