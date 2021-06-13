const replyComment = document.getElementsByClassName("reply-comment");
const replyCommentBox = document.getElementsByClassName("reply-commentBox");
const replyDisplay = document.getElementsByClassName("reply-display");
const replyCommentList = document.getElementsByClassName("reply-comment-listBox");

for(let i=0; i < replyComment.length; i++) {
  replyComment[i].addEventListener("click",() => {
  (replyCommentBox[i].style.display=="block")?(replyCommentBox[i].style.display ="none"):(replyCommentBox[i].style.display ="block");
  }, false); 
}

for(let i=0; i < replyDisplay.length; i++) {
  replyDisplay[i].addEventListener("click",() => {
  (replyCommentList[i].style.display=="block")?(replyCommentList[i].style.display ="none"):(replyCommentList[i].style.display ="block");
  }, false); 
}

const topBtn = document.getElementById("top-btn");
topBtn.addEventListener("click",() => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});

window.addEventListener('scroll', () => {  
  let scrollTop = document.scrollingElement.scrollTop;
  (scrollTop<=0)?(topBtn.style.display ="none"):(topBtn.style.display ="block");
}, false);