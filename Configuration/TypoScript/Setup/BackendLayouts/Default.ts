mod.web_layout.BackendLayouts {
    Default {
        title = Default
        config {
            backend_layout {
                colCount = 2
                rowCount = 2
                rows {
                    1 {
                        columns {
                            1 {
                                name = Content
                                colspan = 2
                                colPos = 0
                            }
                        }
                    }
                    2 {
                        columns {
                            1 {
                                name = Left Footer
                                colspan = 1
                                colPos = 1
                            }
                            2 {
                                name = Right Footer
                                colspan = 1
                                colPos = 2
                            }
                        }
                    }
                }
            }
        }
    }
}