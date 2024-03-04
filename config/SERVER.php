<?php

// Datos de conexión a la base de datos
const SERVER = "localhost";
const DB = "sto";
const USER = "root";
const PASS = "";

// Definir la constante SGBD
const SGBD = "mysql:host=" . SERVER . ";dbname=" . DB;

try {
	// Intenta conectar a la base de datos
	$pdo = new PDO(SGBD, USER, PASS);

	// Establecer el modo de error de PDO a excepciones
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	// Comprobación de la conexión exitosa
	if ($pdo) {
		echo "Conexión exitosa a la base de datos.";
		// Aquí puedes continuar con tus operaciones en la base de datos
	} else {
		echo "No se pudo conectar a la base de datos.";
	}
} catch (PDOException $e) {
	// Si la conexión falla, captura la excepción
	echo "Error de conexión: " . $e->getMessage();
}
/*----------  Datos de la encriptacion (No modificar) ----------*/
const METHOD = "AES-256-CBC";
const SECRET_KEY = '$STO@2021';
const SECRET_IV = '102791';
