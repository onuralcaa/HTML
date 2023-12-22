SQL injection açıklarından korunmanın bir diğer
yöntemi de parametreler üzerinden çalışmak olacaktır.
Kullanılacak veriler parametrik veriler olursa sorun ortadan kalkacaktır.



PREPARE statement FROM "INSERT INTO classics VALUES(?,?,?,?,?)";

SET @author   = "Onur ALACA",
    @title   = "Student",
    @category   = "Bilgisayar Müh.",
    @year   = "2022",
    @isbn   = "5240285";

    EXECUTE statement USING @author, @title, @category, @year, @isbn; //parametrelerin sırası execute komutu ile belirlenir.
    
    //execute işleminden sonra yeni parametreler de bu noktada eklenebilir.-deallocate etmeden önce...




    DEALLOCATE PREPARE statement; //Oluşturulan statement i serbest bırakır. Kaynak yönetimi için önemli