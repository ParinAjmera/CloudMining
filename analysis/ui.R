library(shiny)

shinyUI(pageWithSidebar(
  
  headerPanel("Welcome to Analytic Center"),
  
  sidebarPanel(
    verbatimTextOutput("summary")
  ),
  
  mainPanel(
    
    tabsetPanel(
    
   
    
    tabPanel("Plot for Eclat", 
             plotOutput("plots5"),
             plotOutput("plots6")),
    
    
    tabPanel("Plot for Apriori", 
             
             plotOutput("plots"),
             plotOutput("plots2"),
             plotOutput("plots3"),
             plotOutput("plots4")
    )
  )
  )
))












