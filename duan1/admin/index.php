<?php 
session_start();
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/AdminDanhMucController.php';
require_once './controllers/AdminSanPhamController.php';
require_once './controllers/AdminDonHangController.php';
require_once './controllers/AdminBaoCaoThongKeController.php';
require_once './controllers/AdminTaiKhoanController.php';
require_once './controllers/AdminBinhLuanController.php'; // Thêm controller cho bình luận

// Require toàn bộ file Models
require_once './models/AdminSanPham.php';
require_once './models/AdminDanhMuc.php';
require_once './models/AdminDonHang.php';
require_once './models/AdminTaiKhoan.php';
require_once './models/AdminThongKe.php';
require_once './models/AdminBinhLuan.php'; // Thêm model cho bình luận

// Route
$act = $_GET['act'] ?? '/';

match ($act) {
    // Route cho danh mục
    '/' => (new AdminBaoCaoThongKeController())->home(),
    'danh-muc' => (new AdminDanhMucController())->danhSachDanhMuc(),
    'form-them-danh-muc' => (new AdminDanhMucController())->formAddDanhMuc(),
    'them-danh-muc' => (new AdminDanhMucController())->postAddDanhMuc(),
    'form-sua-danh-muc' => (new AdminDanhMucController())->formEditDanhMuc(),
    'sua-danh-muc' => (new AdminDanhMucController())->postEditDanhMuc(),
    'xoa-danh-muc' => (new AdminDanhMucController())->deleteDanhMuc(),

    // Route cho sản phẩm
    'san-pham' => (new AdminSanPhamController())->danhSachSanPham(),
    'form-them-san-pham' => (new AdminSanPhamController())->formAddSanPham(),
    'them-san-pham' => (new AdminSanPhamController())->postAddSanPham(),
    'form-sua-san-pham' => (new AdminSanPhamController())->formEditSanPham(),
    'sua-san-pham' => (new AdminSanPhamController())->postEditSanPham(),
    'sua-album-anh-san-pham' => (new AdminSanPhamController())->postEditAnhSanPham(),
    'xoa-san-pham' => (new AdminSanPhamController())->deleteSanPham(),
    'chi-tiet-san-pham' => (new AdminSanPhamController())->detailSanPham(),

    // Route cho bình luận
    'danh-sach-binh-luan' => (new AdminBinhLuanController())->danhSachBinhLuan(), // Danh sách bình luận
    'xoa-binh-luan' => (new AdminBinhLuanController())->xoaBinhLuan(), // Xóa bình luận
    'update-trang-thai-binh-luan' => (new AdminBinhLuanController())->updateTrangThaiBinhLuan(), // Cập nhật trạng thái bình luận

    // Route cho đơn hàng
    'don-hang' => (new AdminDonHangController())->danhSachDonHang(),
    'chi-tiet-don-hang' => (new AdminDonHangController())->detailDonHang(),
    'form-sua-don-hang' => (new AdminDonHangController())->formEditDonHang(),
    'sua-don-hang' => (new AdminDonHangController())->postEditDonHang(),

    // Route cho tài khoản
    'list-tai-khoan-quan-tri' => (new AdminTaiKhoanController)->danhSachQuanTri(),
    'form-them-quan-tri' => (new AdminTaiKhoanController)->formAddQuanTri(),
    'them-quan-tri' => (new AdminTaiKhoanController)->postAddQuanTri(),
    'form-sua-quan-tri' => (new AdminTaiKhoanController)->formEditQuanTri(),
    'sua-quan-tri' => (new AdminTaiKhoanController)->postEditQuanTri(),

    // Quản lý tài khoản khách hàng
    'list-tai-khoan-khach-hang' => (new AdminTaiKhoanController)->danhSachKhachHang(),
    'form-sua-khach-hang' => (new AdminTaiKhoanController)->formEditKhachHang(),
    'sua-khach-hang' => (new AdminTaiKhoanController)->postEditKhachHang(),
    'chi-tiet-khach-hang' => (new AdminTaiKhoanController)->detailKhachHang(),

    // Route auth
    'login-admin' => (new AdminTaiKhoanController)->formLogin(),
    'check-login-admin' => (new AdminTaiKhoanController)->login(),
    'logout-admin' => (new AdminTaiKhoanController)->logout(),

    // Route báo cáo thống kê
    'bieu-do' => (new AdminBaoCaoThongKeController)->bieuDo(),
};
?>
