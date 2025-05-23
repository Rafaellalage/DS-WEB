package com.example.projeto1

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.shape.RoundedCornerShape
import androidx.compose.material3.Card
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.projeto1.ui.theme.Projeto1Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Projeto1Theme {
                MyApp()
            }
        }
    }
}

@Composable
fun MyApp() {
    Surface(
        modifier = Modifier.fillMaxSize(),
        color = Color(0xFF4169E1) //Cor do fundo
    ) {
        Column(
            verticalArrangement = Arrangement.Center, //Deixa no centro
            horizontalAlignment = Alignment.CenterHorizontally,//Deixa no centro
            modifier = Modifier.fillMaxSize()
        ) {
            Text(text = "ATIVIDADE DE DOIS CARTÕES", color = Color.Black, fontSize = 20.sp)

            Spacer(modifier = Modifier.height(25.dp)) //Espaço

            CreateCard( //Cartão
                text = "Nome: João Silva\n" +
                        "Tel: (11) 99999-9999\n" +
                        "Email: joao@email.com"
            )

            Spacer(modifier = Modifier.height(50.dp)) //Espaço

            CreateCard( //Cartão
                text = "Nome: Maria Souza\n" +
                        "Tel: (21) 98888-8888\n" +
                        "Email: maria@email.com"
            )
        }
    }
}

@Composable
fun CreateCard(text: String) {
    Card(
        modifier = Modifier
            .padding(8.dp)
            .height(150.dp)
            .width(300.dp),
        shape = RoundedCornerShape(16.dp) //Cantos redondos
    ) {
        Box( // Controla o posicionamento do elemento
            modifier = Modifier
                .fillMaxSize()
                .padding(16.dp),
            contentAlignment = Alignment.Center
        ) {
            Text(
                text = text,
                style = TextStyle(fontSize = 16.sp),// Tamanho e cor da fonte
                color = Color.Black
            )
        }
    }
}

@Preview(showBackground = true)
@Composable
fun GreetingPreview() {
    Projeto1Theme {
        MyApp()
    }
}