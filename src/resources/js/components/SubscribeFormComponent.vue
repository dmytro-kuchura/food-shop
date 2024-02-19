<template>
    <div class="newsletter-inner center-sm">
        <loader v-if="isLoading"></loader>
        <div v-if="!isLoading">
            <div class="">
                <div class="newsletter-title">
                    <h2 class="main_title">{{ static.title }}</h2>
                    <div class="newsletter-slogan">{{ static.subtitle }}</div>
                </div>
            </div>
            <div class="">
                <form @submit.prevent="onSubmit">
                    <div class="newsletter-box">
                        <input type="email" v-model="form.email" :class="{'has-error': errors.email}"
                               :placeholder="static.placeholder">
                        <button type="submit" title="Subscribe" class="btn-color ">{{ static.button }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isLoading: false,
            static: {
                item_id: null,
                title: null,
                subtitle: null,
                placeholder: null,
                button: null,
                success: null,
                successMessage: null,
                error: null,
                errorMessages: null,
            },
            form: {
                email: null,
            },
            errors: [],
        };
    },
    mounted() {
        this.static.item_id = this.$attrs.item;
        this.static.title = this.$attrs.title;
        this.static.subtitle = this.$attrs.subtitle;
        this.static.placeholder = this.$attrs.placeholder;
        this.static.button = this.$attrs.button;
        this.static.success = this.$attrs.success;
        this.static.successMessages = this.$attrs.successMessages;
        this.static.error = this.$attrs.error;
        this.static.errorMessages = this.$attrs.errorMessages;
    },
    methods: {
        onSubmit() {
            this.isLoading = true;
            axios.post('/api/v1/subscribe', this.form)
                .then(() => this.setSuccessResponse())
                .catch(({response}) => this.setErrorResponse(response));
        },
        setSuccessResponse() {
            this.isLoading = false;
            this.form.email = null;
            this.errors = [];

            swal({
                title: 'Отлично!',
                text: 'Подписка формлена!',
                icon: 'success',
            });
        },
        setErrorResponse(response) {
            this.isLoading = false;

            this.errors = response.data.errors;

            swal({
                title: 'Ошибка!',
                text: 'Указан не верный email или что то пошло не так!',
                icon: 'error',
            });
        },
    }
}
</script>
