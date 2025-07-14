const defaultConfig = require("@wordpress/scripts/config/webpack.config");
const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
    ...defaultConfig,
    entry: {
        app: path.resolve(__dirname, "src/js/app.js"),
        style: path.resolve(__dirname, "src/scss/app.scss"),
    },
    output: {
        filename: "js/[name].bundle.js",
        path: path.resolve(__dirname, "dist/"),
        clean: true,
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    "css-loader",
                    "postcss-loader",
                    "sass-loader",
                ],
            },
            {
                test: /\.css$/,
                use: ["style-loader", "css-loader"],
            },
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "css/[name].bundle.css",
        }),
    ],
};
