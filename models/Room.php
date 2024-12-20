<?php
// app/models/Room.php

class Room {
    private db;

    public function __construct(){
        this->db = Database::getInstance();
    }

    public function createRoom(name,hostId) {
        stmt =this->db->prepare("INSERT INTO files_attente (nom, host_id, code_qr) VALUES (?, ?, ?)");
        qrCode = md5(uniqid(rand(), true)); // Génère un code QR uniquestmt->execute([name,hostId, qrCode]);
        return this->db->lastInsertId();
    }

    public function getRoomsByHost(hostId){
        stmt = this->db->prepare("SELECT * FROM rooms WHERE host_id = ?");stmt->execute([hostId]);
        return stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getRoomByCode(qrCode){
        stmt = this->db->prepare("SELECT * FROM rooms WHERE code_qr = ?");
        stmt->execute([qrCode]);
        return stmt->fetch(PDO::FETCH_ASSOC);
    }
}