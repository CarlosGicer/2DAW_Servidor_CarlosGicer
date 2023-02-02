const express = require('express');
const app = express();

app.use(express.json());
app.use(express.urlencoded({ extended: true}))

//Cargar rutas
const song_routes = require("./routes/song");
const user_routes = require("./routes/user");

//Ruta base
app.use("/api", song_routes);
app.use("/api", user_routes);


module.exports = app;