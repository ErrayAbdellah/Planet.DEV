<?php




class Article{
    private $title ;
    private $content ;
    private $id_admin ;
    private $dateCreate ;


    public function __construct($title,$content,$id_admin,$dateCreate)
    {
        $this->title      = $title     ;
        $this->content  = $content ;
        $this->id_admin      = $id_admin      ;
        $this->dateCreate    = $dateCreate    ;
    }
    
    public static function show(){
        try{
            $connect = new  Dbconnection();
            $qry = "SELECT a.*,c.name as 'categorie' FROM article a , categorie c WHERE id_cat = c.id ";
            $stmt = $connect->connection()->prepare($qry);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            "Error".$e->getMessage();
        }
    }
    public static function create($title,$content,$id_admin,$dateCreate,$id_cat){
        try{
            $con = new  Dbconnection();
            $connect = $con->connection();
            $qry = "INSERT INTO `article`( `id_Admin`, `title`, `content`, `dateCreate`, `id_cat`) VALUES (:id_admin,:title,:content,:dateCreate,:id_cat)";
            $stmt = $connect->prepare($qry);
            $stmt->bindParam(':title',$title );
            $stmt->bindParam(':content',$content );
            $stmt->bindParam(':id_admin',$id_admin );
            $stmt->bindParam(':dateCreate',$dateCreate );
            $stmt->bindParam(':id_cat',$id_cat );
            $stmt->execute();

        }catch(PDOException $e){
            "Error".$e->getMessage();
        }
    }
    public static function upDate($id){

    }
    public static function delete($id){

    }


}

// var_dump(Article::show());