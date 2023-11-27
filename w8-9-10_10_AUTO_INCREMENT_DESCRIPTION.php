AUTO_INCREMENT

• Bir kayıt eklediğinizde AUTO_INCREMENT olan bir alanın aldığı değeri
bilemezsiniz. insert_id kullanılarak AUTO_INCREMENT alanın aldığı
değeri öğrenebilirsiniz.
• Örneğin, yeni bir müşteri bir satın alma gerçekleştiğinde Customers
tablosuna CustId (AUTO_INCREMENT) eklenirken satın aldıkları da bu
id aracılığıyla Purchases tablosuna eklenebilir.