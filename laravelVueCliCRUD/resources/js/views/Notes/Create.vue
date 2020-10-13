<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">New note</div>
                    <div class="card-body">
                        <form action="#" method="post" @submit.prevent="store">
                            <div class="form-group">
                                <label for="title">title</label>
                                <input type="text" v-model="form.title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="subject">subject</label>
                                <select v-model="form.subject" id="subject" class="form-control">
                                    <option v-for="subject in subjects" :key="subject.id" :value="subject.slug">{{subject.name}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">description</label>
                                <textarea v-model="form.description" id="description" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            form : {
                title : '',
                description :'',
                subject : ''
            },
            subjects : [],
        };
    },
    mounted(){
        this.getSubjects();
    },
    methods : {
        async getSubjects(){
            let response = await axios.get('/api/subject');
            if (response.status === 200) {
                this.subjects = response.data
            }
        },
        async store(){
            console.log(this.subjects);
            let response = await axios.post('/api/notes/create-new-note', this.form);
            if (response.status == 200) {
                this.form.title = '';
                this.form.subject = '';
                this.form.description = '';
            }
        }
    }
}
</script>

<style>

</style>