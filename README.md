This tutorial 

=== GIT--- 
<!!bỏ dấu ''> 
git version : check version 
git clone 'link reponsive' : kéo code về máy 
git branch : kiểm tra nhánh 
git checkout -b ' tên nhánh ' : tạo ra nhánh mới và chuyển qua nhánh đó 
git add . 
git commit -m "'trong này để ghi chú thích file commit'" 
git log : hiển thị danh sách các file commit 
git reset : quay lại trạng thái trước nếu add thừa file 
git push origin 'nhánh muốn push' 
git status : check trạng thái 
git diff : check những file thay đổi 
git checkout -f : xóa tất cả những thay đổi 
 

follow work 
 

bước 1: chuyển sang nhánh main kéo code mới nhất về 
git checkout main : chuyển về nhánh main 
git pull origin main : kéo code mới nhất về 
 

bước 2: tạo nhánh mới từ nhánh main 
git checkout -b 'newbranch' : tạo và chuyển sang nhánh mới 
 

bước 3: thêm, xóa sửa file 
vào visual tạo folder mới or gõ trên terminal new file 'tên file mới' 
 

bước 4: Add file 
git add . : add tất cả các file 
 

bước 5: commit 
git commit -m '...' 
 

bước 6: push 
git push origin 'tên nhánh hiện tại' : đẩy lên github.com 
 

bước 7: lên git tạo pr 
 

 
**=== terminal ubuntu --- 
ctrl + alt + t : mở terminal** 
 
ls -ld : xem danh sách thư mục file 
pwd : xem đang làm việc ở đâu 
history : hiển thị các lệnh đã gõ gần đây 
mkdir + tên thư mục : tạo một thư mục 
cd + tên thư mục : làm việc với thư mục 
echo + "content" > tên file mới : tạo ra một file với content 
cat + tên file : hiện thị nội dung file 
new file ' tên file mới ' : tạo mới một file 
apt sudo install : download cái gì đấy 
sudo apt update : cập nhật phiên bản mới nhất cho các ứng dụng 

-------------
