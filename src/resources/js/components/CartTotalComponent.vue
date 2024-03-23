<template>
    <table class="table">
        <thead>
        <tr>
            <th colspan="2">Всього</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Товарів</td>
            <td>
                <div class="price-box">
                    <span class="price">{{ cart.totalCount }}</span>
                </div>
            </td>
        </tr>
        <tr>
            <td><b>До сплати</b></td>
            <td>
                <div class="price-box">
                    <span class="price"><b>₴ {{ cart.totalPrice }}</b></span>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        data() {
            return {
                cart: this.$store.state,
            }
        }
    }
</script>
