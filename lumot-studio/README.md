# Lumot Studio - Static Website (Bootstrap 5 + PHP + MySQL)

**Author:** Manuel Ryan S. Habijan, BSIT 2-1, FEU Roosevelt, Marikina
**Email:** habijanfam@gmail.com

Single-page website para sa handmade terrarium business. Static lahat maliban sa
**Contact Us** form na nagsa-save ng message sa MySQL database.

## Files
| File | Gamit |
|---|---|
| `index.html` | Buong page (Navbar, Home, Services, Products, About Us, Contact Us) gamit ang Bootstrap 5 |
| `style.css` | Maliit na custom CSS (smooth scroll lang) |
| `contact.php` | Kumukuha ng form data at nagsa-save sa MySQL |
| `database.sql` | Gumagawa ng database `lumot_studio` at table `contact_messages` |

## Paano i-run (XAMPP)
1. I-start ang **Apache** at **MySQL** sa XAMPP.
2. Ilagay ang folder na ito sa `C:\xampp\htdocs\`.
3. Buksan ang http://localhost/phpmyadmin > **Import** > piliin ang `database.sql` > **Go**.
4. Buksan ang http://localhost/lumot-studio/
5. Mag-send ng test message, tapos tingnan sa phpMyAdmin > `lumot_studio` > `contact_messages`.

Huwag i-double-click ang `index.html`. Kailangan dumaan sa `localhost` para gumana ang PHP.
