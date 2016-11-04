library(shiny)


library("arules")

library("arulesViz")

trans <- data.frame(a = NA, b = NA, C = NA)
trans <- read.table("data/retail.csv" , sep="\t" )
trans1 <- data.frame(a = NA, b = NA, C = NA)
trans1 <- read.table("data/retail.csv" , sep="," )


itemsets <- eclat(trans1, parameter = list(support = 0.95))
rules <- apriori(trans, parameter=list(support=0.000001, confidence=0.000001))

rules


inspect(head(sort(rules, by="lift"),3))



itemsets

shinyServer(function(input, output) {
  
 
  ##
  a <- "Apriori"
  b <- "Eclat"
  output$summary <- renderPrint({
    a
    summary(rules)
    b
    summary(itemsets)
    
  })
  
  
  # Insert the right number of plot output objects into the web page
  output$plots <- renderPlot({
    plot(rules)
    
    
  })
  output$plots2 <- renderPlot({
    plot(rules, shading="order", control=list(main ="Two-key plot"))
    
    
  })
  output$plots3 <- renderPlot({
    plot(rules, measure=c("support","lift"), shading="confidence")
    
    
  })
  output$plots4 <- renderPlot({
    plot(rules, method="matrix",  measure=c("support","confidence"))
    
    
    
  })
  
  
  output$plots5 <- renderPlot({
    plot(itemsets, method="paracoord", control=list(alpha=.5, reorder=TRUE))
    
    
    
  })
  
  output$plots6 <- renderPlot({
    plot(itemsets, shading="order", control=list(main ="Two-key plot"))
  }) 
  
})
