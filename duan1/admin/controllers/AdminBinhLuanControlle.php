<?php
require_once 'models/CommentModel.php';

class CommentController {

  private $commentModel;

  public function __construct() {
    $this->commentModel = new CommentModel();
  }

  // Hiển thị danh sách bình luận
  public function listComments() {
    $comments = $this->commentModel->getAllComments();
    include './views/list-comments.php'; // Gọi view để hiển thị danh sách
  }

  // Xóa bình luận
  public function deleteComment() {
    $id = $_GET['id_binh_luan'];
    $this->commentModel->deleteComment($id);
    header('Location: ' . BASE_URL_ADMIN . '?act=list-comments'); // Quay lại danh sách bình luận
  }

  // Cập nhật trạng thái bình luận
  public function updateCommentStatus() {
    $id = $_GET['id_binh_luan'];
    $status = $_GET['status']; // Trạng thái mới (1: hiển thị, 0: ẩn)
    $this->commentModel->updateCommentStatus($id, $status);
    header('Location: ' . BASE_URL_ADMIN . '?act=list-comments'); // Quay lại danh sách bình luận
  }
}
?>
