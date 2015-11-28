<?php

require_once 'model_publisher.php';
require_once 'model_category.php';
require_once 'model_author.php';

class Book {
        private $data;
        public static function Init($id, $name, $date, $pub, $cat, $auth = NULL) {
            $ret = new Book();
            $ret->id = $id;
            $ret->name = $name;
            $ret->date = $date; //strtotime($date);
            $ret->publisher = $pub;
            $ret->category = $cat;
            $ret->authors = (isset($auth) ? array($auth) : array());
            return $ret;
        }
        
        public function __get($name) {
            return $this->data[$name];
        }
        public function __set($name, $value) {
            if ( substr($name, -2) == 'id')
                $this->data[$name] = (int)$value;
            else if ($name == 'date')
                $this->data[$name] = date_create($value);
            else
                $this->data[$name] = $value;
        }

    public static function Insert($conn, $params) {
        return NULL;
    }
    public static function Find($conn, $pubId = NULL, $catId = NULL) {
        $q = "Select b.id, b.name, b.date, b.publisher_id, p.name, b.category_id, c.name, ".
                "a.id, a.name, a.surname, a.birthdate " .
                "From Publishers as p, Categories as c, Books as b " .
                "Left Outer Join BooksAuthors as ba On ba.book_id = b.id " .
                "Left Outer Join Authors as a On a.id = ba.author_id " .
                "Where b.publisher_id = p.id And b.category_id = c.id";
        
        if (isset($pubId) && $pubId >= 0) {
            $q = $q . " And p.id = $pubId";
        }
        if (isset($catId) && $catId >= 0) {
            $q = $q . " And c.id = $catId";
        }
//echo $q;
        $res = $conn->query($q);
        $books = array();
        while ($book = $res->fetch_row()) {
            $auth = NULL;
            if (isset($book[7])) {
                $auth = new Author($book[7], $book[8], $book[9], $book[10]);
            }
            $id = $book[0];
            
            if (isset($books[$id]) && isset($auth)) {
                $arr = $books[$id]->authors;
                $arr[] = $auth;
                $books[$id]->authors = $arr;
            }
            else {
                $books[$id] = Book::Init($id, $book[1], $book[2],
                        new Publisher($book[3], $book[4]),
                        new Category($book[5], $book[6]),
                        $auth
                        );
            }
        }
        return $books;
    }
    }