<template>
    <div>
        Welcom {{ fname }} {{ lname }}
    </div>
</template>
<script>
    export default {
        props: ['fname', 'lname']
    }
</script>
