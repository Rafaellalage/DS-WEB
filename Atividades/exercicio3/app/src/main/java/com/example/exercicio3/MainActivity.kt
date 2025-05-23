package com.example.exercicio3

import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Box
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxHeight
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.size
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.MaterialTheme
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.exercicio3.ui.theme.Exercicio3Theme


class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Exercicio3Theme {
                MyApp()
            }
        }
    }
}
@Composable
fun MyApp(){
    var CounterA by remember{ mutableStateOf(0) }
    var CounterB by remember{ mutableStateOf(0) }
    Surface(
        modifier = Modifier.fillMaxHeight().fillMaxWidth(),
        color = Color(0xFF001F54)
    ){
        Column(verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ){
            Text(text = "Time Corinthians",
                style = TextStyle(
                    color = Color.Black,
                    fontSize = 30.sp))
            Spacer(modifier = Modifier.height(15.dp))

            Text(text = "Pontuação Corinthians",
                style = TextStyle(
                    color = Color.Black,
                    fontSize = 25.sp))

            Text(text = "$CounterA",
                style = TextStyle(
                    color = Color.Black,
                    fontSize = 39.sp
                )
            )
            Spacer(modifier = Modifier.height(10.dp))
            CreateCircleA(CounterA)
            {CounterA+=1}

            Spacer(modifier = Modifier.height(50.dp))
        //time b
        Text(text = "Time Palmeiras",
            style = TextStyle(
            color = Color.Green,
            fontSize = 29.sp
        ))

            Spacer(modifier = Modifier.height(15.dp))
        Text(text = "Pontuação Palmeiras",
            style = TextStyle(
            color = Color.Green,
            fontSize = 25.sp
        ))

        Text(text = "$CounterB",
            style = TextStyle(
                color = Color.Green,
                fontSize = 39.sp
            )
        )
        Spacer(modifier = Modifier.height(15.dp))
        CreateCircleB (CounterB)
        {CounterB+=1}

    }
    }

}



//@Preview
@Composable
fun CreateCircleA(CounterA: Int, onTap: () -> Unit) {

    Card(
        modifier = Modifier
            .padding(3.dp) // Espaçamento externo
            .size(135.dp) // Altura e largura iguais
            .clickable {
                onTap()

                Log.d("Contador", "CreateCircle: $CounterA")

            },
        shape = CircleShape // Formato circular
    ) {
        Box(modifier = Modifier.fillMaxSize(), contentAlignment = Alignment.Center) {
            Text(text = "Add")
        }
    }
}

@Composable
fun CreateCircleB(CounterB: Int, onTap: () -> Unit) {

    Card(
        modifier = Modifier
            .padding(3.dp) // Espaçamento externo
            .size(135.dp) // Altura e largura iguais
            .clickable {
                onTap()

                Log.d("Contador", "CreateCircle: $CounterB")

            },
        shape = CircleShape // Formato circular
    ) {
        Box(modifier = Modifier.fillMaxSize(), contentAlignment = Alignment.Center) {
            Text(text = "Add")
        }
    }
}