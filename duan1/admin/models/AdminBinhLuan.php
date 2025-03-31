<?php
require_once 'Database.php'; // Kết nối tới cơ sở dữ liệu

class CommentModel {

  private $db;

  public function __construct() {
    $this->db = new Database();
  }

  // Lấy tất cả bình luận
  public function getAllComments() {
    $sql = "SELECT b.id, p.ten_san_pham, u.ten_nguoi_dung, b.noi_dung, b.ngay_dang, b.trang_thai
            FROM binh_luan b
            JOIN san_pham p ON b.id_san_pham = p.id
            JOIN nguoi_dung u ON b.id_nguoi_dung = u.id";
    return $this->db->query($sql);
  }

  // Xóa bình luận
  public function deleteComment($id) {
    $sql = "DELETE FROM binh_luan WHERE id = :id";
    $this->db->execute($sql, ['id' => $id]);
  }

  // Cập nhật trạng thái bình luận (hiển thị/ẩn)
  public function updateCommentStatus($id, $status) {
    $sql = "UPDATE binh_luan SET trang_thai = :status WHERE id = :id";
    $this->db->execute($sql, ['id' => $id, 'status' => $status]);
  }
}
?>
