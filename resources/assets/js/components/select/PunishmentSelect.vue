<template>
    <div class="punish-select">
        <select-living-player v-on:api="punishment" :option-header="optionHeader"/>
    </div>
</template>

<script>
    import SelectLivingPlayer from "./SelectLivingPlayer";
    import axios from "axios";

    export default {
        name: "PunishmentSelect",
        components: {SelectLivingPlayer},
        data() {
            return {
                optionHeader: '処刑者選択',
            }
        },
        methods: {
            punishment(targeted) {
                axios.post('../../api/punishment', {
                    player_id: targeted,
                });
            }
        }
    }
</script>

<style scoped>

</style>
