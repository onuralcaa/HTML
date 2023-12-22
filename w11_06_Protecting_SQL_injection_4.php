//Sadece 1800 yılından sonraki kitaplari ekrana getiren SQL injection engelleme amaçlı yapılan bir sorgu.

------------------------------------------------------------------------------
PREPARE statement FROM "select * from classics where year >?";

SET @p1 = "1800" ;

    EXECUTE statement USING @p1; 
    DEALLOCATE PREPARE statement;

------------------------------------------------------------------------------





//Yılı 1800 den yüksek olan ve title ında o harfi içeren kayıtların incelenmesini sağlayan SQL injection sorgusu.

--------------------------------------------------------------------------------
PREPARE statement FROM "select * from classics where year >? and title like ?";

SET @p1 = "1800",
    @p2 =  "%o%";

    EXECUTE statement USING @p1, @p2; 
    DEALLOCATE PREPARE statement;
---------------------------------------------------------------------------------







