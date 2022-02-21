tải các package cần thiết
composer update


tạo + seed cơ sở dữ liệu
php artisan migrate:fresh --seed


chạy
php artisan serve
 
 iseed khoá hoc, bai hoc
php artisan iseed courses,lessons --force
 php artisan iseed courses,lessons,course_user,questions,exams,users,results --force
