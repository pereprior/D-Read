<?php

namespace App\Entity;

class Book {

    private int $id;
    private string $title;
    private string $author;
    private string $publicationYear;
    private string $genre;
    private string $price;
    private string $description;

    public function __construct($id, $title, $author, $publicationYear, $genre, $price, $description) {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->publicationYear = $publicationYear;
        $this->genre = $genre;
        $this->price = $price;
        $this->description = $description;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPublicationYear() {
        return $this->publicationYear;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function setAuthor(string $author): void {
        $this->author = $author;
    }

    public function setPublicationYear(string $publicationYear): void {
        $this->publicationYear = $publicationYear;
    }

    public function setGenre(string $genre): void {
        $this->genre = $genre;
    }

    public function setPrice(string $price): void {
        $this->price = $price;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

}