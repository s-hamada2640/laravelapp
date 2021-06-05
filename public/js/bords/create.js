const replyComment = document.getElementsByClassName("reply-comment");
const replyCommentBox = document.getElementsByClassName("reply-commentBox");

for(let i=0; i < replyComment.length; i++) {
  replyComment[i].addEventListener("click",() => {
  (replyCommentBox[i].style.display=="block")?(replyCommentBox[i].style.display ="none"):(replyCommentBox[i].style.display ="block");
  }, false); 

}
