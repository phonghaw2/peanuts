# peanuts
Office and apartment brokerage

# Phân tích trang Môi giới văn phòng và căn hộ cho thuê
## _side project_

### Đối tượng sử dụng
- Quản trị viên
- Chủ nhà
- Khách hàng(những người có nhu cầu thuê văn phòng và căn hộhộ)

### Chức năng từng đối tượng
A. Quản trị viên
- Quản lý trang thông tin: banner, giới thiệu,...
- Quản lý người dùng (chủ nhà và người có nhu cầu tìm trọ)
- Quản lý file: ảnh 
- Quản lý bài đăng 
- Thống kê báo cáo

B. Chủ nhà
- Quản lý bài đăng
- Tìm kiếm khách hàng
- Chỉnh sửa thông tin cá nhân (địa chỉ, thông tin liên hệ) 

C.Khách hàng
- Tìm kiếm văn phòng, căn hộ (địa điểm, vị trí, giá thành, quy định, ở ghép hay ở đơn,  diện tích)
- Xem danh sách các văn phòng và căn hộ cho thuê (sắp xếp ngẫu nhiên:v )
- Review,  đánh giá (báo cáo vi phạm: lừa đảo, spam, không liên hệ được, thông tin bài đăng sai)
-  Ghim bài để theo dõi

## Phân tích chức năng

Đăng bài (chủ nhà)

| Các tác nhân | Chủ nhà | 
| ------ | ------ |
| MÔ TẢ | Đăng bài |  
| Kích hoạt | Người dùng ấn vào nút "Đăng bài tuyển dụng" trên menu |  
| Đầu vào |Tiêu đề<br>Tên công việc<br>Địa điểm: thành phố - quận (select2 - load về local)<br>Diện tích<br>Thông tin liên hệ<br>Ngày đăng,ngày hết hạng<br>Mức giá (slidebar)<br>Ngôn ngữ (multiple select2)<br>Mô tả (textarea)<br> |    
| Trình tự xử lý | |
| Đầu ra | Đúng: Hiển thị trang người dùng và thông báo thành công<br>Sai: Hiển thị trang đăng nhập và thông báo thất bại |
| Lưu ý | Kiểm tra ô nhập không được để trống bằng JavaScript |


> Hổ trợ và giúp các bên tìm kiếm được văn phòng 
> hay căn hộ phù hợp, tối thiệu thời gian tìm kiếm 
> với nguồn có sẵn. Tích hợp thêm hệ thống phân tích 
> ở back-end để nắm rõ hơn nhu cầu của các bên.


## License

Phonghaw2

**Free Software, Hell Yeah!**
