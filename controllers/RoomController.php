<?php
// app/controllers/RoomController.php

class RoomController {
    private roomModel;

    public function __construct() {
        this->roomModel = new Room();
    

    public function createRoom(name, hostId) {
        roomId = this->roomModel->createRoom(name, hostId);
        return roomId;
    }

    public function showRooms(hostId) 
        return this->roomModel->getRoomsByHost(hostId);
    

    public function joinRoomByQR(qrCode) {
        return this->roomModel->getRoomByCode(qrCode);
    }
} 