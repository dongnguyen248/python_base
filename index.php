Back End :
- root folder : 
	la thư mục chứa file đầu tiên của website(index);
	khi truy cập vào tên miền : => chạy đến thư mục root
	/var/www/html.

echo : xuat ra man hinh
phpinfo().
biến : bắt đầu bằng $;
các  kiểu biến :
	+ string: nối chuỗi dùng dấu "." khi dùng nháy đơn.
		dùng nháy đôi thì tốn bộ nhớ hơn => vẫn nên dùng nháy đơn vì dùng nháy đôi thì php phải tìm trong chuỗi có biến không để thay thế.
	+ interger:
	+ float:
	+ double:
	+ mảng array() chạy được cả php 7 và php 5;
	+ array [] chạy đc chỉ trên php 7;
	+ in ra toàn bộ mảng : var_dump(tên mảng);
	+ print_r(tên mảng);
	+ boolean :
	+ object :
- php có hai loại biến:
	+ biến tự tạo;
	+ biến môi trường là các biến có sẵn của php:
		+ $_POST
		+ $_GET
		+ $_REQUEST
		+ $_SERVER
		+ $_SESSION

	+ Hằng số : cost :php 7
		    dèine('NAME', 'Nguyen Dac Dong') : php7, php5
	+ Hàm : function tenham(agr){
					}
	+ có 2 kiểu gán biến là : assign by value, asign by referent
	+ để sử dụng referent trong php thì thêm & trước biến.
	+ string_split()
	+ string_explode(' ', tenbien) : cat theo ky tu (ky tu la khoang trang);
	+ implode() : noi mot mang thanh mot chuoi;
	+ string_replace();
	+ sunstr(): cắt ký tự;
	+ strlen() : đếm số ký tự trong chuỗi.
	+ strpos() : string position, nếu không tìm thấy thì trả về false; vị trí nằm ở đầu tiền là vị trí thứ 0 => dù có nhưng vẫn bị trả về falase nên phải dùng === để so sánh;
	+ printf
	+ print 
===================================
Array :
	push một phần tử vào mảng :
	+ array_push($students, 'hoang') hoặc $students[] = 'hoang'
	+ Trong php có thể tự đặt key.
	+ $student =['a','b','c'] => key php sẽ tự tạo $student[0];dùng khi các phần tử giống nhau về cấu trúc
	+ $person = [
		'name'=> 'Nguyen Van A',
		'age'=>40	
					
			] => name là key . key này do mình đặt. khi mảng biểu thị một đối tượng nào đấy và các phần tử khác nhau thì ta nên đặt key. khi dùng mảng có key thì dễ hiểu hơn mảng có không có key.
	+ aray_pop(tenmang) :cắt một phần tử ở cuối mảng ;
	+ array_shift(tenamng): xóa phần tử đầu tiên
	+ array_unshift(tenmang, 'phan tu them vao'): thêm vào phần tử đầu tiêng mảng.
	+ array_reverse(tenmang): đảo theo chiều ngược lại một mảng. gán theo kiểu value
	+ sort(tenmang): sắp xếp mảng. gán theo kiểu referent.
	+ array_flip(tenmang): đổi giá trị thành key;
	+ array_slice(arr,start,lenght): cắt một mảng. kiểu gán value.
	+ array_splice(arr, start, length). kiểu gán referent.
	+ array_rand(arr): lấy ra ngẫy nhiên một phần tử random.
	+ array_merge(arr1,arr2): gộp 2 hay nhiều mảng lại thành 1 mảng.
	+ aray_key(arr): lấy các key của mảng.
	+ array_value(arr): lấy các value của mảng.
	+ array_map(function(agr){},arr): lặp qua mỗi phần tử và mỗi phần tử trả về 
Loop :
	+ for:không thể continue hoặc break
	+ foreach(arrs as $key => value){

				};
	+
Biến môi trường :
	+ $_POST : không được hiện thị trên thanh địa chỉ
	+ $_GET: lấy được thông tin trên thanh địa chỉ
kiểm tra biến tồn tại hay không : isset($_POST['username]){
					do something.		
					};






	




