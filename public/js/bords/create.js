const replyComment = document.getElementsByClassName("reply-comment");
const replyCommentBox = document.getElementsByClassName("reply-commentBox");
const replyDisplay = document.getElementsByClassName("reply-display");
const replyCommentList = document.getElementsByClassName("reply-comment-listBox");

for(let i=0; i < replyComment.length; i++) {
  replyComment[i].addEventListener("click",() => {
    if(replyCommentBox[i].style.display=="block") {
      replyCommentBox[i].style.display ="none";
      replyComment[i].innerHTML = "返信する";
    }
    else{
      replyCommentBox[i].style.display ="block";
      replyComment[i].innerHTML = "返信フォームを閉じる";
    };
  }, false); 
}

for(let i=0; i < replyDisplay.length; i++) {
  replyDisplay[i].addEventListener("click",() => {
    if(replyCommentList[i].style.display=="block") {
      replyCommentList[i].style.display ="none";
      replyDisplay[i].innerHTML = "返信コメントの表示";
    }
    else {
      replyCommentList[i].style.display ="block";
      replyDisplay[i].innerHTML = "コメントの非表示";
    }
  }, false); 
}

const topBtn = document.getElementById("top-btn");
topBtn.addEventListener("click",() => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});
// トップボタン表示
window.addEventListener('scroll', () => {  
  let scrollTop = document.scrollingElement.scrollTop;
  (scrollTop<=0)?(topBtn.style.display ="none"):(topBtn.style.display ="block");
}, false);