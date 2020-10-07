Vue.component('comments', {
    template : '#comment-template',
    props : ['comment'],
    data : function () {
        return {
            plus : false,
            minus : false
        }
    },
    methods : {
        tambah : function () {
            this.plus = !this.plus
            this.minus = false
        },
        kurang : function () {
            this.minus = !this.minus
            this.plus = false
        } 
    },
    computed : {
        score : function () {
            if (this.plus) 
                return this.comment.score + 1
            else if(this.minus)
                return this.comment.score - 1
            else
                return this.comment.score
            
        }
    }

})

let vm = new Vue({
    el:"#app",
    data:{
        comments:[
            {body:"komentar1", time:"2020", score:0},
            {body:"komentar2", time:"2020", score:0},
            {body:"komentar3", time:"2020", score:5}
        ],
        commentText : ''
    },
    methods : {
        postComment : function () {
            this.comments.push (
                {body : this.commentText, time : "2020" , score : 0}
            )
            this.commentText = ''
        }
    }
})