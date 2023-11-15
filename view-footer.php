<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title Here</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-rbs5fQKFKaFJl/M6zP5Z0qz8M/6NrQ4tsJAcOT6LlXTR+o7U1vj3I2tHW+nTuP5T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@3.0.11/dist/vue.global.prod.js" integrity="sha384-CJxHo8xWz1E6q3g4IeBekp1wlANd0qLEmhaMDuoIr2FQ8Z9pM+1qCUz98DJM3pQx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/lodash-es@4.17.21/index.js"></script>

<!DOCTYPE html>
<html>

    <title>JavaScript Example</title>
    <style>
        /* Define a CSS class for buttons with margins */
        .button-with-margin {
            margin: 10px;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Define a hover effect */
        .button-with-margin:hover {
            background-color: #0056b3;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<body>
    <div class="container">
        <h2>JavaScript Alert</h2>
        <button class="button-with-margin" onclick="showAlert()">Try it</button>

        <h2>JavaScript Timing</h2>
        <p>Click "Try it". Wait 3 seconds, and the page will alert "Hello".</p>
        <button class="button-with-margin" onclick="delayedAlert()">Try it</button>
    </div>

    <script>
        function showAlert() {
            alert("Learning is fun!");
        }

        function delayedAlert() {
            setTimeout(function() {
                alert('Hello! Thank you for waiting!');
            }, 3000);
        }
    </script>
    <script>
        const config = {
  type: 'doughnut',
  data: data,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Chart.js Doughnut Chart'
      }
    }
  },
};</script>
    <!DOCTYPE html>
<html>
<body>

<h1>JavaScript Dates</h1>
<h2>Using new Date()</h2>

<p>100000000000 milliseconds from January 01 1970 UTC is:</p>
<p id="demo"></p>

<script>
const d = new Date(100000000000);
document.getElementById("demo").innerHTML = d;
</script>
    <!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Button Example</title>
<body>

<script>
// Function to be executed when the button is clicked
function handleClick() {
    alert('Button clicked!'); // You can replace this with your desired action
}

// Create a button element
var button = document.createElement('button');

// Set the button text
button.textContent = 'Click Here';

// Add a click event listener to the button
button.addEventListener('click', handleClick);

// Append the button to the body
document.body.appendChild(button);
    <!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Move Button Example</title>

<script>
function handleClick() {
    alert('Button clicked!');
}

var button = document.createElement('button');
button.textContent = 'Click Here';
button.addEventListener('click', handleClick);
document.body.appendChild(button);
</script>
<script setup>
import { shuffle as _shuffle } from 'lodash-es'
import { ref } from 'vue'

const getInitialItems = () => [1, 2, 3, 4, 5]
const items = ref(getInitialItems())
let id = items.value.length + 1

function insert() {
  const i = Math.round(Math.random() * items.value.length)
  items.value.splice(i, 0, id++)
}

function reset() {
  items.value = getInitialItems()
}

function shuffle() {
  items.value = _shuffle(items.value)
}

function remove(item) {
  const i = items.value.indexOf(item)
  if (i > -1) {
    items.value.splice(i, 1)
  }
}
</script>
import { TransitionGroup } from 'vue'

<template>
  <button @click="insert">insert at random index</button>
  <button @click="reset">reset</button>
  <button @click="shuffle">shuffle</button>

  <TransitionGroup tag="ul" name="fade" class="container">
    <div v-for="item in items" class="item" :key="item">
      {{ item }}
      <button @click="remove(item)">x</button>
    </div>
  </TransitionGroup>
</template>

<style>
.container {
  position: relative;
  padding: 0;
}

.item {
  width: 100%;
  height: 30px;
  background-color: #f3f3f3;
  border: 1px solid #666;
  box-sizing: border-box;
}

/* 1. declare transition */
.fade-move,
.fade-enter-active,
.fade-leave-active {
  transition: all 0.5s cubic-bezier(0.55, 0, 0.1, 1);
}

/* 2. declare enter from and leave to state */
.fade-enter-from,
.fade-leave-to {
  opacity: 0;
  transform: scaleY(0.01) translate(30px, 0);
}

/* 3. ensure leaving items are taken out of layout flow so that moving
      animations can be calculated correctly. */
.fade-leave-active {
  position: absolute;
}
</head>
</style>

</body>
</html>
