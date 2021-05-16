// console.log("test");

const replyComment = document.getElementById("reply-comment");
const replyCommentBox = document.getElementById("reply-commentBox");
replyComment.onclick = function() {
  (replyCommentBox.style.display=="block")?(replyCommentBox.style.display ="none"):(replyCommentBox.style.display ="block");
};